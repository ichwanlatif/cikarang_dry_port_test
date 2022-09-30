<?php
    class Container_model extends CI_Model
    {
        private $table = 'Container';

        public function rules()
        {
            return [
                [
                    'field' => 'ContainerNumber',
                    'label' => 'Container Number',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Size',
                    'label' => 'Size',
                    'rules' => 'required'
                ],
                [
                    'field' => 'Type',
                    'label' => 'Type',
                    'rules' => 'required'
                ],
                [
                    'field' => 'GateInDate',
                    'label' => 'Gate In Date',
                    'rules' => 'required'
                ]
                ];
        }

        public function read()
        {
            return $this->db->get_where($this->table, ['DeletedDate' => null])->result_array();
        }

        public function getContainerByContainerNumber($containerNumber)
        {
            return $this->db->get_where($this->table, ['ContainerNumber' => $containerNumber])->row_array();
        }

        public function save()
        {
            $data = array(
                'ContainerNumber' => $this->input->post('ContainerNumber'),
                'Size' => $this->input->post('Size'),
                'Type' => $this->input->post('Type'),
                'GateInDate' => date('Y-m-d H:i:s', strtotime($this->input->post('GateInDate'))),
            );

            $this->db->insert($this->table, $data);
        }

        public function update()
        {
            $data = array(
                'ContainerNumber' => $this->input->post('ContainerNumber'),
                'Size' => $this->input->post('Size'),
                'Type' => $this->input->post('Type'),
                'GateInDate' => date('Y-m-d H:i:s', strtotime($this->input->post('GateInDate'))),
            );

            $this->db->update($this->table, $data, array('ContainerNumber' => $this->input->post('ContainerNumber')));
        }

        public function delete($container_number)
        {
            $data = array(
                'DeletedDate' => date('Y-m-d H:i:s')
            );
            return $this->db->update($this->table, $data, array('ContainerNumber' => $container_number));
        }
    }

?>